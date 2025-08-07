<h1>welcome employee<h1>
<?php
$emp=new \App\Models\ModelEmployee();
$data=$emp->findAll();
$data=$emp->join("office","office.officecode = employee.officecode")
            ->where("city","kg buloh")// nak display empoyee city= jerteh
            ->orWhere("city","kuala nerus")//nak display employee city =kuala nerus juga
            ->orderBy("fullname","Desc")//nak sort data abjad fullname menurun
            ->findAll();


echo "<table border=1>";
foreach($data as $row){
    echo "<tr>";
    echo "<td>$row->ID </td>";
    echo "<td>$row->fullname </td>";
    echo "<td>$row->officecode</td>";
    echo "<td>$row->userlevel</td>";
    echo "<td>$row->postcode </td>";//join dari table Office
    echo "<td>$row->city </td>";//join dari table Office
    echo "</tr>";
   
}
echo "</table>";
?>