<?php

namespace BootstrapUI\View;

/**
 * UIViewTrait: Trait that loads the custom UIBootstrap helpers and sets View
 * layout to the UIBootstrap's one.
 */
trait UIViewTrait
{
    /**
     * Initialization hook method.
     *
     * ### Options: Associative array with valid keys:
     *   - `layout`:
     *      - If empty or true will use the plugin's layout
     *      - If a layout name passed it will be used
     *      - If false do nothing (will keep your layout)
     *
     * @return void
     */
    public function initializeUI(array $options = [])
    {
        if (!isset($options['layout']) || $options['layout'] === true) {
            $this->layout = 'BootstrapUI.default';
        } elseif (!empty($options['layout']) || $options['layout'] === '') {
            $this->layout = $options['layout'];
        }

        $this->loadHelper('Html', ['className' => 'BootstrapUI.Html']);
        $this->loadHelper('Form', ['className' => 'BootstrapUI.Form']);
        $this->loadHelper('Flash', ['className' => 'BootstrapUI.Flash']);
        $this->loadHelper('Paginator', ['className' => 'BootstrapUI.Paginator']);
    }
}
