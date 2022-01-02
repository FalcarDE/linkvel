<?php
/*
 * Created by @Hoang
*/

class CExceptionHandler
{
    public static function DisplayPDOHandler(  $pdoServer, $Sql_Statement )
    {
        /*
            * $pdoServer->errorInfo() -> returns an array of error information about the last operation performed by this database handle
            * 0 	SQLSTATE error code (a five characters alphanumeric identifier defined in the ANSI SQL standard).
            * 1 	Driver-specific error code.
            * 2 	Driver-specific error message.
            */

        if(!$Sql_Statement)
        {
            print_r($pdoServer->errorInfo());
        }
    }
}