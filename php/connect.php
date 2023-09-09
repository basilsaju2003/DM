<?php
$conn = mysqli_connect('localhost', "root", "", "dm");
if (!$conn)
   die("connection fail");

function insert($sql)
{
   global $conn;
   if (!mysqli_query($conn, $sql)) {
      echo mysqli_error($conn);
      return false;
   } else
      return true;
}

function num($sql)
{
   global $conn;
   $result = mysqli_query($conn, $sql);   
   if ($result) {
      $numrow = mysqli_num_rows($result);
      return $numrow;
   } else {
      return false;
   }
}

function sel($sql)
{
   global $conn;
   $result = mysqli_query($conn, $sql);
   if ($result) {
      return $result;
   } else {
      return false;
   }
}

function update($sql)
{
   global $conn;
   if (!mysqli_query($conn, $sql)) {
      echo mysqli_error($conn);
      return false;
   } else
      return true;
}

function delete($sql)
{
   global $conn;
   if (!mysqli_query($conn, $sql)) {
      echo mysqli_error($conn);
      return false;
   } else
      return true;
}