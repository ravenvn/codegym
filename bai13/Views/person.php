<?php
if (!$person) {
    echo 'No person found!';
} else {
    echo $person->id . ' - ' . $person->name . ' - ' . $person->age;
}
