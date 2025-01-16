<?php

declare(strict_types=1);

namespace App;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250115163609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add mobile_phone_number into sylius_address';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sylius_address ADD mobile_phone_number VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->throwIrreversibleMigrationException();
    }
}
