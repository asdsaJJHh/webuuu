<?php
function fetch_data_from_url($url) {
    $response = @file_get_contents($url); 
    if ($response !== false) {
        return $response;
    } else {
        return "Failed to fetch data.";
    }
}

function process_username($username) {
    $url = "https://cash.app/$username";
    $data = fetch_data_from_url($url);

    if ($data === "Failed to fetch data.") {
        $username_first_char = strtoupper(substr($username, 0, 1));

        $colors = [ '#00ff00', '#0000ff', '#ffff00', '#ff00ff', '#00ffff']; // List of available colors
        $random_color = $colors[array_rand($colors)]; // Randomly select a color from the list

        // Construct the SVG code with the random background color
        $fake_image_svg = '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                          <rect width="100%" height="100%" fill="' . $random_color . '"/> <!-- Random background color -->
                          <text x="50%" y="50%" font-family="Arial" font-size="40" fill="#000" text-anchor="middle" dy=".3em">'.$username_first_char.'</text>
                        </svg>'; 

        // Encode the SVG code
        $fake_image_url = 'data:image/svg+xml;base64,' . base64_encode($fake_image_svg);

        $fake_display_name = $username;
        $fake_formatted_cashtag = $username; 
    } else {
        $image_url_index = strpos($data, '"image_url"');
        $display_name_index = strpos($data, '"display_name"');
        $formatted_cashtag_index = strpos($data, '"formatted_cashtag"');

        if ($image_url_index !== false && $display_name_index !== false && $formatted_cashtag_index !== false) {
            $start_index = strpos($data, '"', $image_url_index + strlen('"image_url"') + 1) + 1;
            $end_index = strpos($data, '"', $start_index);
            $image_url = substr($data, $start_index, $end_index - $start_index);
            
            $start_index = strpos($data, '"', $display_name_index + strlen('"display_name"') + 1) + 1;
            $end_index = strpos($data, '"', $start_index);
            $display_name = substr($data, $start_index, $end_index - $start_index);

            $start_index = strpos($data, '"', $formatted_cashtag_index + strlen('"formatted_cashtag"') + 1) + 1;
            $end_index = strpos($data, '"', $start_index);
            $formatted_cashtag = substr($data, $start_index, $end_index - $start_index);
        } else {
            // If some data is missing, generate fake data
            $username_first_char = strtoupper(substr($username, 0, 1));

            // Generate a random color for the background
            $random_color = '#' . substr(md5(mt_rand()), 0, 6);

            // Construct the SVG code with the random background color
            $fake_image_svg = '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                              <rect width="100%" height="100%" fill="' . $random_color . '"/> <!-- Random background color -->
                              <text x="50%" y="50%" font-family="Arial" font-size="40" fill="#000" text-anchor="middle" dy=".3em">'.$username_first_char.'</text>
                            </svg>'; 

            // Encode the SVG code
            $fake_image_url = 'data:image/svg+xml;base64,' . base64_encode($fake_image_svg);

            $fake_display_name = $username; 
            $fake_formatted_cashtag = "$" . $username;
        }
    }

    return [
        'image_url' => $image_url ?? $fake_image_url,
        'display_name' => $display_name ?? $fake_display_name,
        'formatted_cashtag' => $formatted_cashtag ?? $fake_formatted_cashtag
    ];
}
?>
