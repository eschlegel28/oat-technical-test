<?php
/**
 * Created by PhpStorm.
 * User: eschlegel
 * Date: 06/08/2018
 * Time: 18:44
 */
namespace Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use FOS\OAuthServerBundle\Entity\ClientManager;


/**
 * Class UserImportCommand
 * create command to import the user file in the db
 * @package Command
 */
class UserImportCommand extends ContainerAwareCommand{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:oauth-server:create-user')
            ->setDescription('Creates a new user')
            ->addOption(
                'redirect-uri',
                null,
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Sets redirect uri for user. Use this option multiple times to set multiple redirect URIs.',
                null
            )
            ->addOption(
                'grant-type',
                null,
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Sets allowed grant type for user. Use this option multiple times to set multiple grant types..',
                null
            )
            ->addOption(
                'user-id',
                null,
                InputOption::VALUE_REQUIRED ,
                'Sets allowed grant type for user. Use this option multiple times to set multiple grant types..',
                null
            )
            ->addOption(
                'secret-id',
                null,
                InputOption::VALUE_REQUIRED ,
                'Sets the user secret id',
                null
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        //import the csv or json file in db
    }
}