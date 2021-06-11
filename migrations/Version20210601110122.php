<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210601110122 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation ADD level INT NOT NULL, ADD date DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', ADD gradelevel VARCHAR(255) DEFAULT NULL, DROP description, DROP date_start, DROP date_end');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation ADD description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD date_start DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\', ADD date_end DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\', DROP level, DROP date, DROP gradelevel');
    }
}
