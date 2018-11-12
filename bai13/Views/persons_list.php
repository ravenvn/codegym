<?php
echo '<table border="1">';

foreach ($persons as $person) {
    echo '<tr>';
    echo '<td><a href="/?id=' . $person->id . '">' .  $person->name . '</a></td>';
    echo '<td>' . $person->age . '</td>';
    echo '</tr>';
}
echo '</table>';