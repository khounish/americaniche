<?php
   $user = "awsuser";
   $password = "Americaniche1";
   $ODBCConnection = odbc_connect("DRIVER={Amazon Redshift (x64)}; Server=redshift-cluster-1.cpmrep2pkzz9.us-east-1.redshift.amazonaws.com; Database=dev;Port=5349;String Types=Unicode", $user, $password);
   $SQLQuery = "SELECT * FROM cashflow_originator";
   echo "$SQLQuery";
   $RecordSet = odbc_exec($ODBCConnection, $SQLQuery);
   while (odbc_fetch_row($RecordSet)) {
        $result = odbc_result_all($RecordSet, "border=1");
        echo $result;
    }
    odbc_close($ODBCConnection);
   ?>
