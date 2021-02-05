<?php
require_once 
$post = $_REQUEST["post"];

$hint = "";
$result = "error";

if ($post !== "") {
    $sql = "SELECT * FROM posts WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $post);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
}
if($result == "error"){
    return $result;
}else{
    echo $result["likes"];
}

?>