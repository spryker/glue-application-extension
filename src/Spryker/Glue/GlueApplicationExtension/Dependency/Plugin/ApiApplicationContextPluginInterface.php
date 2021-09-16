<?php

namespace Spryker\Glue\GlueApplicationExtension\Dependency\Plugin;

interface ApiApplicationContextPluginInterface
{
    /**
     * @return \Spryker\Glue\Kernel\Container
     */
    public function getKey(): string;

    /**
     * Validate http request plugins
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ValidateHttpRequestPluginInterface[]
     */
    public function getValidateHttpRequestPlugins(): array;

    /**
     * Plugins that called before processing {@link \Spryker\Glue\Kernel\Controller\FormattedAbstractController}.
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormattedControllerBeforeActionPluginInterface[]
     */
    public function getFormattedControllerBeforeActionTerminatePlugins(): array;

    /**
     * Format/Parse http request to internal rest resource request
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormatRequestPluginInterface[]
     */
    public function getFormatRequestPlugins(): array;

    /**
     * Format response data the data which will send with http response
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormatResponseDataPluginInterface[]
     */
    public function getFormatResponseDataPlugins(): array;

    /**
     * Format/add additional response headers
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\FormatResponseHeadersPluginInterface[]
     */
    public function getFormatResponseHeadersPlugins(): array;

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ValidateRestRequestPluginInterface[]
     */
    public function getValidateRestRequestPlugins(): array;

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RestRequestValidatorPluginInterface[]
     */
    public function getRestRequestValidatorPlugins(): array;

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RestUserValidatorPluginInterface[]
     */
    public function getRestUserValidatorPlugins(): array;

    /**
     * Called before invoking controller action
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ControllerBeforeActionPluginInterface[]
     */
    public function getControllerBeforeActionPlugins(): array;

    /**
     * Called after done processing controller action
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ControllerAfterActionPluginInterface[]
     */
    public function getControllerAfterActionPlugins(): array;

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RestUserFinderPluginInterface[]
     */
    public function getRestUserFinderPlugins(): array;

    /**
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RouterParameterExpanderPluginInterface[]
     */
    public function getRouterParameterExpanderPlugins(): array;

    /**
     * @return \Spryker\Shared\ApplicationExtension\Dependency\Plugin\ApplicationPluginInterface[]
     */
    public function getApplicationPlugins(): array;

    /**
     * Rest resource route plugin stack
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRoutePluginInterface[]
     */
    public function getResourceRoutePlugins(): array;
}
