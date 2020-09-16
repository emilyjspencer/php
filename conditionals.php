<?php



function canIMeetFriends($r) {
  if ($r > 1){
    return "No";
  } else {
    return "Yes";
  }
}

echo canIMeetFriends(1);