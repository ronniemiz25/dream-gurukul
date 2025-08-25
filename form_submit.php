<?php
// Debugging: show all POST data
echo '<pre>';
print_r($_POST);
echo '</pre>';

// Assign variables
$name = $_POST["fname"] ?? '';
$email = $_POST["femail"] ?? '';
$contact = $_POST["fcontact"] ?? '';
$project = $_POST["project"] ?? 'Dream Gurukul'; // fallback if not set
$utm_form_name = $_POST["utm_form_name"] ?? 'Enquiry Form';
$utm_source = $_POST["utm_source"] ?? '';
$utm_campaign = $_POST["utm_campaign"];
$utm_medium = $_POST["utm_medium"] ?? '';
$utm_content = $_POST["utm_content"] ?? '';
$utm_term = $_POST["utm_term"] ?? '';
$network = $_POST["network"] ?? '';
$campaign_id = $_POST["campaign_id"] ?? '';
$adgroup_id = $_POST["adgroup_id"] ?? '';
$gclid = $_POST["gclid"] ?? '';
$device = $_POST["device"] ?? '';
$creative = $_POST["creative"] ?? '';
$placement = $_POST["placement"] ?? '';
$target_id = $_POST["target_id"] ?? '';
$loc_interest_ms = $_POST["loc_interest_ms"] ?? '';
$loc_physical_ms = $_POST["loc_physical_ms"] ?? '';
$device_model = $_POST["device_model"] ?? '';
$keyword = $_POST["keyword"] ?? '';
$match_type = $_POST["match_type"] ?? '';
$adposition = $_POST["adposition"] ?? '';
$source_id = $_POST["source_id"] ?? '';
$target = $_POST["target"] ?? '';
$source_url = $_POST["source_url"] ?? '';

$apikey = "kG6vgYgUqEmnHUtHX15pNQ";

// Prepare data
$myvars = http_build_query([
    'apikey' => $apikey,
    'name' => $name,
    'email' => $email,
    'contact' => $contact,
    'project' => $project,
    'utm_form_name' => $utm_form_name,
    'utm_source' => $utm_source,
    'utm_medium' => $utm_medium,
    'utm_content' => $utm_content,
    'utm_campaign' => $utm_campaign,
    'utm_term' => $utm_term,
    'network' => $network,
    'campaign_id' => $campaign_id,
    'adgroup_id' => $adgroup_id,
    'gclid' => $gclid,
    'device' => $device,
    'creative' => $creative,
    'placement' => $placement,
    'target_id' => $target_id,
    'loc_interest_ms' => $loc_interest_ms,
    'loc_physical_ms' => $loc_physical_ms,
    'device_model' => $device_model,
    'keyword' => $keyword,
    'match_type' => $match_type,
    'adposition' => $adposition,
    'source_id' => $source_id,
    'target' => $target,
    'source_url' => $source_url
]);

// cURL POST
$url = 'https://www.realtybucket.com/webhook/website_form_data';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Optional debug log
error_log("Form Submitted: Name=$name, Email=$email, Contact=$contact");

// Redirect to thank-you page
header("Location: https://thejaingroup.com/dreamgurukul/thank-you.php?name=" . urlencode($name) . "&email=" . urlencode($email) . "&phone=" . urlencode($contact));
exit();
?>