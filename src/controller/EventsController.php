<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function index() {
    $conditions = array();

    //example: search on title
    // $conditions[0] = array(
    //   'field' => 'title',
    //   'comparator' => 'like',
    //   'value' => 'schoen'
    // );

    //example: search on location_id
    // $conditions[0] = array(
    //   'field' => 'location_id',
    //   'comparator' => '=',
    //   'value' => 4
    // );

    //example: search on location name
    // $conditions[0] = array(
    //   'field' => 'location',
    //   'comparator' => 'like',
    //   'value' => 'strand'
    // );

    //example: search on organiser id
    // $conditions[0] = array(
    //   'field' => 'organiser_id',
    //   'comparator' => '=',
    //   'value' => '1'
    // );

    //example: search on organiser id
    // $conditions[0] = array(
    //   'field' => 'organiser',
    //   'comparator' => 'LIKE',
    //   'value' => 'gent'
    // );

    //example: search on tag name
    // $conditions[0] = array(
    //   'field' => 'tag',
    //   'comparator' => '=',
    //   'value' => 'gastvrijheid'
    // );

    //example: events ending in may 2017
    // $conditions[0] = array(
    //   'field' => 'end',
    //   'comparator' => '>=',
    //   'value' => '2017-05-01 00:00:00'
    // );
    // $conditions[1] = array(
    //   'field' => 'end',
    //   'comparator' => '<',
    //   'value' => '2017-06-01 00:00:00'
    // );

    //example: events happening on march first
    // $conditions[0] = array(
    //   'field' => 'start',
    //   'comparator' => '<=',
    //   'value' => '2017-03-01 00:00:00'
    // );
    // $conditions[1] = array(
    //   'field' => 'end',
    //   'comparator' => '>=',
    //   'value' => '2017-03-01 00:00:00'
    // );

    //example: search on location, with certain end date + time
    // $conditions[0] = array(
    //   'field' => 'location',
    //   'comparator' => 'like',
    //   'value' => 'voortuin'
    // );
    // $conditions[1] = array(
    //   'field' => 'end',
    //   'comparator' => '=',
    //   'value' => '2017-05-01 19:00'
    // );

    $conditions = array();

    $conditions[0] = array(
      'field' => 'start',
      'comparator' => '>=',
      'value' => date('Y-m-d 00:00:00')
    );
    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);
  }

  public function agenda() {
    $start = '2017-05-01';
    $conditions = array();

    $conditions[0] = array(
      'field' => 'start',
      'comparator' => '>=',
      'value' => date('Y-m-d 00:00:00')
    );

    if (isset($_GET['tag'])) {
      $conditions[1] = array(
        'field' => 'tag',
        'comparator' => '=',
        'value' => $_GET['tag'],
      );
    }

    if (isset($_GET['month'])) {
      if ($_GET['month'] == 'mei') {
        $conditions[1] = array(
          'field' => 'start',
          'comparator' => '>=',
          'value' => date("Y-m-d H:i:s", strtotime("$start")),
        );

        $conditions[2] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => date("Y-m-31 H:i:s", strtotime("$start")),
        );
      } else if ($_GET['month'] == 'juni') {
        $conditions[1] = array(
          'field' => 'start',
          'comparator' => '>=',
          'value' => date("Y-m-d H:i:s", strtotime("$start +1 month")),
        );

        $conditions[2] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => date("Y-m-31 H:i:s", strtotime("$start +1 month")),
        );
      } else if ($_GET['month'] == 'juli') {
        $conditions[1] = array(
          'field' => 'start',
          'comparator' => '>=',
          'value' => date("Y-m-d H:i:s", strtotime("$start +2 months")),
        );

        $conditions[2] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => date("Y-m-31 H:i:s", strtotime("$start +2 months")),
        );
      } else if ($_GET['month'] == 'augustus') {
        $conditions[1] = array(
          'field' => 'start',
          'comparator' => '>=',
          'value' => date("Y-m-d H:i:s", strtotime("$start +3 months")),
        );

        $conditions[2] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => date("Y-m-31 H:i:s", strtotime("$start +3 months")),
        );
      } else if ($_GET['month'] == 'september') {
        $conditions[1] = array(
          'field' => 'start',
          'comparator' => '>=',
          'value' => date("Y-m-d H:i:s", strtotime("$start +4 months")),
        );

        $conditions[2] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => date("Y-m-31 H:i:s", strtotime("$start +4 months")),
        );
      }
      if (isset($_GET['tag'])) {
        $conditions[3] = array(
          'field' => 'tag',
          'comparator' => '=',
          'value' => $_GET['tag'],
        );
      }
    }

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);
  }

  public function detail() {
    $conditions = array();

    // $conditions[0] = array(
    //   'field' => 'id',
    //   'comparator' => '=',
    //   'value' => $_GET['id'],
    // );

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);
  }

  public function error() {

  }
}
