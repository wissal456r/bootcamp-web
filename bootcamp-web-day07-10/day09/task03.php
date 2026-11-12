<?php
function dynamic_body():string { return render_body((string)($_GET['page']??'')); }
