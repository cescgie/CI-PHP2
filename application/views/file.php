	<?php 
  //CA Information
  if (!sizeof($data['sum_cf'])) {
      echo 
      '<div class="alert alert-info">No CF Data.</div>';
  }else{
      echo
      '<div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">CF</div>';
          foreach ($data['sum_cf'] as $sum){
             echo 
            '<p>'.$sum->sum_cf. ' Records</p>';
          }
      echo
      '</div> <!-- panel panel-default -->'; 
  } 

  //GA Information
  if (!sizeof($data['sum_ga'])) {
      echo 
      '<div class="alert alert-info">No GA Data.</div>';
  }else{
      echo
      '<div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">GA</div>';
          foreach ($data['sum_ga'] as $sum){
             echo 
            '<p>'.$sum->sum_ga. ' Records</p>';
          }
      echo
      '</div> <!-- panel panel-default -->'; 
  } 

  //GL Information
  if (!sizeof($data['sum_gl'])) {
      echo 
      '<div class="alert alert-info">No GL Data.</div>';
  }else{
      echo
      '<div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">GL</div>';
          foreach ($data['sum_gl'] as $sum){
             echo 
            '<p>'.$sum->sum_gl. ' Records</p>';
          }
      echo
      '</div> <!-- panel panel-default -->'; 
  } 

  //IR Information
  if (!sizeof($data['sum_ir'])) {
      echo 
      '<div class="alert alert-info">No IR Data.</div>';
  }else{
      echo
      '<div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">IR</div>';
          foreach ($data['sum_ir'] as $sum){
             echo 
            '<p>'.$sum->sum_ir. ' Records</p>';
          }
      echo
      '</div> <!-- panel panel-default -->'; 
  }

  //KV Information
  if (!sizeof($data['sum_kv'])) {
      echo 
      '<div class="alert alert-info">No KV Data.</div>';
  }else{
      echo
      '<div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">KV</div>';
          foreach ($data['sum_kv'] as $sum){
             echo 
            '<p>'.$sum->sum_kv. ' Records</p>';
          }
      echo
      '</div> <!-- panel panel-default -->'; 
  }
  ?>