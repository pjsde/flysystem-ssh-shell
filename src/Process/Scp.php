<?php

declare(strict_types = 1);

namespace Phuxtil\Flysystem\SshShell\Process;

class Scp extends Ssh
{
    protected function prepareCommand(string $command): string
    {
        $command = sprintf(
            'scp -P %d %s %s',
            $this->configurator->requirePort(),
            $this->prepareAuth(),
            $command
        );

        return $command;
    }
}
