<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230621065320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment CHANGE id id VARCHAR(255) NOT NULL, CHANGE conference_id conference_id VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE conference ADD slug VARCHAR(255) NOT NULL, CHANGE id id VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE conference_id conference_id INT NOT NULL');
        $this->addSql('ALTER TABLE conference DROP slug, CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }
}