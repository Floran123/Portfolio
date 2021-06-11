<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210601112543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE professional_experiences ADD date VARCHAR(255) NOT NULL, DROP date_start, DROP date_end');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE professional_experiences ADD date_start DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\', ADD date_end DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\', DROP date');
    }
}
