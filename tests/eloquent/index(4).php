<!-- ----------------------------------------------------------------------------------------- -->
<?php

public function up()
{
    DB::statement($this->dropView());
    
    DB::statement($this->createView());
}

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

private function dropView(): string
{
    return <<<SQL
    DROP VIEW IF EXISTS `meter_reading_reports`;
    SQL;
}

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

private function createView(): string
{
    return <<<SQL
    CREATE VIEW `meter_reading_reports` AS

    SELECT /* … The query */
    SQL;
}

?>
<!-- ----------------------------------------------------------------------------------------- -->