<?php

class Timetable_model extends CI_Model {


    public function alreadyExist($data, $current_editing_rec_id = "") {
      $this->db->select('*');
      $this->db->from('timetable t');
      $this->db->where('t.is_archived', 0);
      $this->db->where('t.campus_id', $data['campus_id']);
      $this->db->where('t.faculty_id', $data['faculty_id']);
      $this->db->where('t.depart_id', $data['depart_id']);
      $this->db->where('t.part', $data['part']);
      $this->db->where('t.semester', $data['semester']);
      $this->db->where('t.class_group', $data['class_group']);
      if($current_editing_rec_id != "") {
        $this->db->where('t.id !=', $current_editing_rec_id);
      }
      return $this->db->get()->num_rows();
    }

    public function getRecords() {

      $this->db->select('t.*, c.name campus_name, d.name depart_name, f.name faculty_name, CONCAT(u.title," ", u.full_name) username');
      $this->db->from('timetable t');
      $this->db->where('t.is_archived', 0);
      $this->db->join('campus c', 'c.id = t.campus_id', 'LEFT');
      $this->db->join('departments d', 'd.id = t.depart_id', 'LEFT');
      $this->db->join('faculties f', 'f.id = t.faculty_id', 'LEFT');
      $this->db->join('users u', 'u.id = t.user_id', 'LEFT');
      return $this->db->get()->result();
    }

    public function getDetailRecords($timetable_id) {
      $this->db->select('td.*, u.title as user_title, u.full_name as user_fullname, s.subject_title, c.name class_name, s.course_code');
      $this->db->from('timetable_details td');
      $this->db->where('td.timetable_id', $timetable_id);
      $this->db->join('users u', 'u.id = td.teacher_id', 'LEFT');
      $this->db->join('subjects s', 's.id = td.subject_id', 'LEFT');
      $this->db->join('class_rooms c', 'c.id = td.classroom_id', 'LEFT');
      return $this->db->get()->result();
    }

    public function getRecord($id) {

      $this->db->select('t.*, c.name campus_name, d.name depart_name, f.name faculty_name, CONCAT(u.title," ", u.full_name) username');
      $this->db->from('timetable t');
      $this->db->where('t.is_archived', 0);
      $this->db->join('campus c', 'c.id = t.campus_id', 'LEFT');
      $this->db->join('departments d', 'd.id = t.depart_id', 'LEFT');
      $this->db->join('faculties f', 'f.id = t.faculty_id', 'LEFT');
      $this->db->join('users u', 'u.id = t.user_id', 'LEFT');
      $this->db->where('t.id', $id);
      return $this->db->get()->row();
    }

    public function getTeachers($timetable_record) {

      $this->db->select('*');
      $this->db->from('users u');
      // $this->db->where('u.campus_id', $timetable_record->campus_id);
      $this->db->where('u.faculty_id', $timetable_record->faculty_id);
      $this->db->where('u.depart_id', $timetable_record->depart_id);
      $this->db->where('u.type', 'TEACHER');
      $this->db->where('u.account_verified', 1);
      $this->db->where('u.account_active', 1);
      $this->db->where('u.is_archived', 0);

      return $this->db->get()->result();
    }

    public function getSubjects($timetable_record) {
      /* TESTING REQUIRED FOR THE FOLLOWING
      * what if the campus is general but faculty is specific
      * what if only department is specific then it should fetch only that
      department subjects
      * REPORT
      */
      $this->db->select('*');
      $this->db->from('subjects s');

      $this->db->group_start();
      $this->db->where('s.for_campus', 'general');
      $this->db->or_where('s.campus_id', $timetable_record->campus_id);
      $this->db->group_end();

      $this->db->group_start();
      $this->db->where('s.for_faculty', 'general');
      $this->db->or_where('s.faculty_id', $timetable_record->faculty_id);
      $this->db->group_end();

      $this->db->group_start();
      $this->db->where('s.for_depart', 'general');
      $this->db->or_where('s.depart_id', $timetable_record->depart_id);
      $this->db->group_end();

      $this->db->where('s.is_archived', 0);

      return $this->db->get()->result();
    }

    public function getClassRooms($timetable_record) {
      $this->db->select('*');
      $this->db->from('class_rooms c');
      // BELOW SHOULD NOT BE CHECKED BECAUSE THE SYSTEM IS ONLY FOR FET
      // $this->db->where('c.campus_id', $timetable_record->campus_id);
      // $this->db->where('c.faculty_id', $timetable_record->faculty_id);
      $this->db->where('c.is_archived', 0);
      return $this->db->get()->result();
    }
}
