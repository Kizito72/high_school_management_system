<?php
try {
    $conn = new PDO(
        'mysql:host='.DBHost.';dbname='.DBName.';charset='.DBCharset,
        DBUser, DBPass
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM tbl_school LIMIT 1");
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC); // fetch one row as associative array

    if($row){
        define('WBName', $row['name']);        // use column names!
        define('WBLogo', $row['logo']);
        define('WBResSys', $row['result_system']);
        define('WBResAvi', $row['allow_results']);
    } else {
        // Defaults if no row exists
        define('WBName', 'Solid State High School');
        define('WBLogo', 'assets/images/default_logo.png');
        define('WBResSys', 0);
        define('WBResAvi', 1);
    }

} catch(PDOException $e) {
    // In case of DB error
    define('WBName', 'Solid State High School');
    define('WBLogo', 'assets/images/default_logo.png');
    define('WBResSys', 0);
    define('WBResAvi', 1);
}
?>

