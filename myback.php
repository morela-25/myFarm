  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($cid)) { array_push($errors, "Cow ID is required"); }
  if (empty($lac)) { array_push($errors, "Lactation is required"); }
  if (empty($ftypAM)) { array_push($errors, "Feed type (AM) is required"); }
  if (empty($fqAM)) { array_push($errors, "Feed Qty (AM) is required"); }
  if (empty($mkQam)) { array_push($errors, "Milk Qty is required"); }
  if (empty($ftypPM)) { array_push($errors, "Feed type (PM) is required"); }
  if (empty($fqPM)) { array_push($errors, "Feed Qty is required"); }
  if (empty($mkQpm)) { array_push($errors, "Milk Qty (PM) is required"); } 
  if (empty($inf)) { array_push($errors, "If no infection detected, please type N/A"); }
  if (empty($vchm)) { array_push($errors, "If no Vert Chem used, please type N/A"); }
  if (empty($date)) { array_push($errors, "Correct date is required"); }
  if (empty($nme)) { array_push($errors, "Correct name is required"); }
  if (empty($ec)) { array_push($errors, "EC number is required"); } 
   