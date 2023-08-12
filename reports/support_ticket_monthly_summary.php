<?php

# The title of your report
$reportdata["title"] = "";

# The description of your report
$reportdata["description"] = "";

# Header text - this gets displayed above the report table of data
$reportdata["headertext"] = "";

# Report Table of Data Column Headings - should be an array of values
$reportdata["tableheadings"] = array("Column 1","Column 2","Column 3");

# Report Table Values - one of these lines for each row you want in the table
# should be an array of values to match the column headings
$reportdata["tablevalues"][] = array("Data 1","Data 2","Data 3");
$reportdata["tablevalues"][] = array("Data 1","Data 2","Data 3");
$reportdata["tablevalues"][] = array("Data 1","Data 2","Data 3");

# Report Footer Text - this gets displayed below the report table of data
$data["footertext"] = "";
