<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171230180354 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY employees_ibfk_1');
        $this->addSql('DROP INDEX title ON employees');
        $this->addSql('ALTER TABLE employees CHANGE title title_id INT NOT NULL');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_387341A3A9F87BD FOREIGN KEY (title_id) REFERENCES titles (id)');
        $this->addSql('CREATE INDEX IDX_387341A3A9F87BD ON employees (title_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Employees DROP FOREIGN KEY FK_387341A3A9F87BD');
        $this->addSql('DROP INDEX IDX_387341A3A9F87BD ON Employees');
        $this->addSql('ALTER TABLE Employees CHANGE title_id title INT NOT NULL');
        $this->addSql('ALTER TABLE Employees ADD CONSTRAINT employees_ibfk_1 FOREIGN KEY (title) REFERENCES titles (id)');
        $this->addSql('CREATE INDEX title ON Employees (title)');
    }
}
