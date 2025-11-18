<?php
include( 'DatabaseCon.php' );
$db = new DatabaseCon;

if ( isset( $_POST[ 'catid' ] ) ) {
    $catid = $_POST[ 'catid' ];

    $rs = $db->selectData( "SELECT * FROM subcategory WHERE catid = '$catid'" );

    if ( mysqli_num_rows( $rs ) > 0 ) {
        echo '<option value="">Select Subcategory</option>';
        while ( $row = mysqli_fetch_array( $rs ) ) {
            echo "<option value='{$row['scatid']}'>{$row['sname']}</option>";
        }
    } else {
        echo '<option value="">No subcategories available</option>';
    }
}
?>
