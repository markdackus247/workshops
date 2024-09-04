<?php
function selectAll($db)
{
    $sql_selectAll_educations = "SELECT * FROM education ORDER by creboNumber;";

    $stmt = $db->prepare($sql_selectAll_educations);

    if ($stmt->execute()) {
        $educations = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $educations;
    }
}