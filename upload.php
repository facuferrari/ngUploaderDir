<?php

//ALL VALIDATION
move_uploaded_file($_FILES["uploader"]["tmp_name"], "upload/" . $_FILES["uploader"]["name"]);