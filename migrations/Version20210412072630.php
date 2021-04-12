<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210412072630 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE users_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE users ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE users ADD email VARCHAR(180) NOT NULL');
        $this->addSql('ALTER TABLE users ADD roles JSON NOT NULL');
        $this->addSql('ALTER TABLE users ADD password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE users DROP c1');
        $this->addSql('ALTER TABLE users DROP c2');
        $this->addSql('ALTER TABLE users DROP c3');
        $this->addSql('ALTER TABLE users DROP c4');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
        $this->addSql('ALTER TABLE users ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP SEQUENCE users_id_seq CASCADE');
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP INDEX UNIQ_1483A5E9E7927C74');
        $this->addSql('DROP INDEX "primary"');
        $this->addSql('ALTER TABLE users ADD c1 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD c2 TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD c3 TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD c4 TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE users DROP id');
        $this->addSql('ALTER TABLE users DROP email');
        $this->addSql('ALTER TABLE users DROP roles');
        $this->addSql('ALTER TABLE users DROP password');
    }
}
