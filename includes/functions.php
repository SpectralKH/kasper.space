<?

$site_address = "http://localhost";

function get_slug() {
	global $slug;
	$slug = $_SERVER["REQUEST_URI"];
	$slug = explode("?", $slug, 2);
	$slug = $slug[0];
	$slug = rtrim($slug, "/");
	$slug = ltrim($slug, "/");
	$slug = strtolower($slug);
	return $slug;
}

function redirect_from_to_slug($from_slug, $to_slug) {
	global $slug;
	global $site_address;
	if ($slug == $from_slug) {
		header("Location: $site_address$to_slug");
		die();
	}
}
function redirect_if() {
	redirect_from_to_slug("home", "");
}

function db_connect() {
	global $db_connection;
	$host = "localhost";
	$username = "web";
	$password = "pass";
	$db_name = "kh";
	$db_connection = mysqli_connect($host, $username, $password, $db_name);
}
function db_disconnect() {
	// 5. Disconnect from db
	global $db_connection;
	mysqli_close($db_connection);
}
function db_query($query, $max_1_affected_row = false) {
	// true to require only 1 affected row
	global $db_connection;
	$result = mysqli_query($db_connection, $query);

	// Test for query error
	if ($max_1_affected_row = true) {
		$result
			? /*success*/
			: die("Datatabse query failed. " . mysqli_error($db_connection));
	} else {
		$result && mysqli_affected_rows($db_connection) == 1
			? /*success*/
			: die("Datatabse query failed. " . mysqli_error($db_connection));
	}
	return $result;
}

?>
