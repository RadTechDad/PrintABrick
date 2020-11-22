<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190923223516 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql("UPDATE rebrickable_set SET rebrickable_set.disabled = TRUE WHERE id IN ('llca3-1', 'lmg005-1', '6769-1', 'MMMB013-1', '4000010-1', '200M-1', '5714-1', '6053-1', '66174-1', '853261-1', '238-3', 'MMMB015-1', 'fruit1-1', '200A-1', '5005107-1', 'lmg006-1', '1089-1', '1912-1', '9750-1', '10656-1', 'llca10-1', 'LBFIRERESCUE-1', '30215-1', '5574-1', '6194-1', '2855057-1', 'fruit7-1', '6164-1', 'lmg002-1', '4002014-1', '2000707-1', '8300-1', 'K10041-1', '624210-1', '6092-2', '5004932-1', '853148-1', '5706-1', '4000013-1', 'lmg009-1', '9697-1', '3861-1', '9912-1', '8833-17', '850851-1', '9370-1', '3724-1', '6162-1', '40306-1', '9781465461186-1', 'fruit4-1', '2000704-1', '7793-1', 'lmg004-1', '66380-1', '71011-0', 'KFruit-1', 'k34432-1', '1300-1', '40086-1', '239-2', '5004266-1', '9279-2', '40081-4', 'C001-1', 'K8761-1', '852997-1', '5001370-1', '10156-1', '852513-1', '10663-1', '40081-1', '9376-1', '5003027-1', '9698-1', '4212852-1', '70820-1', '853373-1', '951-2', '1645-1', '1649-1', '991464-1', '3221-1', '5004067-1', 'lmg008-1', '9020-1', 'lmg010-1', 'llca22-1', '2856130-1', '5487-1', '71018-18', '4000024-1', '1513-1', '40145-1', '9251-1', '71010-17', '11912-1', '1512-1', '6186-1', '5002887-1', '6177-1', '4423-1', '1675-1', '5701-1', 'tf05-1', '700K-1', '71008-0', 'b63de-01', '71007-0', '4535-1', '9365-1', 'McDR6US-1', '3442-1', 'K1062-1', '75008-1', '19748019-1', 'k34434-1', '40295-1', '4534-1', '7795-1', '852996-1', 'mln09-1', '71010-18', '5700-1', '9287-1', '238-2', '45020-1', '2856081-1', '5004115-1', '853610-1', '9373-1', '2000425-1', '1045-2', '45003-1', 'k34431-1', '2011-2', '700GP6-1', '71219-1', '71266-1', '9369-1', '1646-1', '9248-1', '5000249-1', '239-1', 'b66de-01', '200-3', 'lmg007-1', 'ISBN1338112120-1', '8527-1', '6163-1', '2000705-1', '9280-1', '850457-1', '5002887-2', '40297-1', '2000701-1', '10657-1', '40085-1', 'lmg001-1', '6762-1', '66311-1', '852856-1', '8714-1', '8857-2', '21037-1', '238-4', '238-1', '238-6', '9781465456618-1', '1915-1', '40305-1', '3300003-1', '238-8', '66559-1', '55001-1', '4000022-1', '5000672-1', '5002041-1', '10662-1', '238-5', '40296-1', '5001622-1', '9380-1', '5001121-1', 'lwp06-1', '1644-1', 'LLBUS-1', '5932-1', '40256-1', 'auditt-1', '238-7', '9249-1', '4000014-1', '2-11', '1075-1', '1974-1', '7601-1', 'fruit6-1', '71008-18', 'lmg003-1', '3018-1', '40166-1', '9781465455987-1', '5003096-1', '9452-1', 'K10039-1', '40081-3', '851341-1', '3723-1', 'k34433-1', '4414-1', 'llca8-1', '7994-1', '2148-1', 'legobricks-1')");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}