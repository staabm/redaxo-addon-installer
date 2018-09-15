<?php

namespace Redaxo\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller as BaseInstaller;

class AddonInstaller extends BaseInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        list($owner, $packageName) = explode($package->getPrettyName(), '/', 2);

        return 'redaxo/src/addons/'.$packageName;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'redaxo-addon' === $packageType;
    }
}