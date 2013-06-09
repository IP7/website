<?php



/**
 * This class defines the structure of the 'files_archives' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.ip7website.map
 */
class FilesArchiveTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'ip7website.map.FilesArchiveTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('files_archives');
        $this->setPhpName('FilesArchive');
        $this->setClassname('FilesArchive');
        $this->setPackage('ip7website');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('files_ids', 'FilesIds', 'VARCHAR', true, 255, null);
        $this->addColumn('title', 'Title', 'VARCHAR', true, 128, null);
        $this->addColumn('date', 'Date', 'TIMESTAMP', true, null, null);
        $this->addColumn('path', 'Path', 'VARCHAR', true, 255, null);
        $this->addColumn('access_rights', 'AccessRights', 'TINYINT', false, null, 0);
        $this->addColumn('downloads_count', 'DownloadsCount', 'INTEGER', false, null, 0);
        $this->addColumn('deleted', 'Deleted', 'BOOLEAN', false, 1, '0');
        // validators
        $this->addValidator('title', 'minLength', 'propel.validator.MinLengthValidator', '3', 'Le nom doit faire au moins 3 caractères.');
        $this->addValidator('path', 'minLength', 'propel.validator.MinLengthValidator', '3', 'Le chemin doit faire au moins 3 caractères.');
        $this->addValidator('path', 'notMatch', 'propel.validator.NotMatchValidator', '/^[a-z]+:\/\//i', 'Le fichier ne peut être distant.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FilesArchiveTableMap
