<?php


      //pagination
      $config['base_url'] = 'http://localhost/wangy/admin/index';
      $config['num_links'] = 5; //num links

      //styleing
      $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
      $config['full_tag_close'] = '</ul></nav>';

      $config['first_link'] = 'first';
      $config['first_tag_open'] = '<li class="page-item">';
      $config['first_tag_close'] = '</li>';

      $config['Last_link'] = 'Last';
      $config['Last_tag_open'] = '<li class="page-item">';
      $config['Last_tag_close'] = '</li>';

      $config['next_link'] = '&raquo';
      $config['next_tag_open'] = '<li class="page-item">';
      $config['next_tag_close'] = '</li>';

      $config['prev_link'] = '&laquo';
      $config['prev_tag_open'] = '<li class="page-item">';
      $config['prev_tag_close'] = '</li>';

      $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
      $config['cur_tag_close'] = '</a></li>';

      $config['num_tag_open'] = '<li class="page-item">';
      $config['num_tag_close'] = '</li>';
      
      $config['attributes'] = array('class' =>'page-link');




?>