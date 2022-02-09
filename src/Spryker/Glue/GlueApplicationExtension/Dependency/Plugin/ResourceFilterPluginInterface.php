<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueApplicationExtension\Dependency\Plugin;

use Generated\Shared\Transfer\GlueRequestTransfer;

/**
 * Use this plugin to filter resources.
 */
interface ResourceFilterPluginInterface
{
    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     * @param array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceInterface> $resources
     *
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceInterface>
     */
    public function filter(GlueRequestTransfer $glueRequestTransfer, array $resources): array;
}
