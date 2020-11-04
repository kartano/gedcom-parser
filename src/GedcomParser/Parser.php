<?php declare(strict_types=1);
/**
 * GEDCOM parser
 *
 * @author Simon Mitchell <kartano@gmail.com>
 *
 * @version 1.0.0   Prototype
 */

namespace GedcomParser;

/**
 * Class Parser
 * @package GedcomParser
 */
class Parser
{
    /**
     * @var string The GED filename being parsed
     */
    private string $filename='';

    /**
     * Parser constructor.
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $this->filename=$filename;
    }

    /**
     * @param string $filename The filename to process.
     */
    public function parse()
    {
        //
    }

    /**
     * Return the filename
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }
}
