/// <reference types="webpack/module" />

import {domReady} from '@roots/sage/client'
import initMenus from './modules/menu'

const main = async (): Promise<void> => {
  // application code
  initMenus()
}

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main)

import.meta.webpackHot?.accept(main)
