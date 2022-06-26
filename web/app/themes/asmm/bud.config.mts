import { Bud } from '@roots/bud'

import '@roots/bud-framework'
import '@roots/bud-typescript'

export default async (app: Bud) => {
  app
    /**
     * Application entrypoints
     *
     * Paths are relative to your resources directory
     */
    .entry({
      app: ['@scripts/app', '@styles/app'],
      editor: ['@scripts/editor', '@styles/editor'],
    })

    /**
     * These files should be processed as part of the build
     * even if they are not explicitly imported in application assets.
     */
    .assets('images')

    /**
     * These files will trigger a full page reload
     * when modified.
     */
    .watch('resources/views/**/*', 'app/**/*')

    /**
     * Target URL to be proxied by the dev server.
     *
     * This should be the URL you use to visit your local development server.
     */
    .proxy('http://asmm.test')

    /**
     * Development URL to be used in the browser.
     */
    .serve('http://0.0.0.0:3000')

    /**
     * Relative path to the public directory.
     */
    .setPublicPath('/app/themes/asmm/public/')

    .typescript.typecheck.enable();
}
