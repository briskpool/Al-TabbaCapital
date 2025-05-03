<?php
// Change to your repo directory
chdir('/home/l2apyc1bq78e/public_html/test');

// Pull the latest code from GitHub
$output = [];
exec('git fetch origin main 2>&1', $output);
exec('git reset --hard origin/main 2>&1', $output);
exec('git clean -fd 2>&1', $output); // Optional: cleans untracked files
exec('git submodule update --init --recursive 2>&1', $output); // If using submodules

// Show the result
echo "<pre>" . implode("\n", $output) . "</pre>";
?>
