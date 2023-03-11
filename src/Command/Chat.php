<?php

/**
 * @author Mhammed Talhaouy <tal7aouy@gmail.com> 
 */

namespace Tal7aouy\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

final class Chat extends Base
{
    protected function configure(): void
    {
        $this
            ->setName('chat')
            ->setDescription('Ask questions to OpenAI from the CLI.')
            ->addOption(
                'multiline',
                'm',
                InputOption::VALUE_NONE,
                'Allow multiline text. Helpful to write text with multiple lines on the terminal. You should confirm the End Of File with "ctrl+d".',
                null
            );
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ): int {
        $output->writeln([
            '
              $$$$$$\  $$\                 $$\     $$$$$$\  $$$$$$$\$$$$$$$$\ 
             $$  __$$\ $$ |                $$ |   $$  __$$\ $$  __$$\__$$  __|
             $$ /  \__|$$$$$$$\   $$$$$$\$$$$$$\  $$ /  \__|$$ |  $$ | $$ |   
             $$ |      $$  __$$\  \____$$\_$$  _| $$ |$$$$\ $$$$$$$  | $$ |   
             $$ |      $$ |  $$ | $$$$$$$ |$$ |   $$ |\_$$ |$$  ____/  $$ |   
             $$ |  $$\ $$ |  $$ |$$  __$$ |$$ |$$\$$ |  $$ |$$ |       $$ |   
             \$$$$$$  |$$ |  $$ |\$$$$$$$ |\$$$$  \$$$$$$  |$$ |       $$ |   
              \______/ \__|  \__| \_______| \____/ \______/ \__|       \__|   
                                                                              
                                                                              
                                                                              
          '
        ]);

        while (true) {
            $this->chat($input, $output);
        }
    }
}
