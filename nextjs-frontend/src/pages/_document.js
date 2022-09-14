import { Html, Head, Main, NextScript } from 'next/document'
import { siteMeta } from '@/lib/constants'

const {siteLang} = siteMeta;

export default function Document() {
    return (
        <Html lang={siteLang}>
            <Head>
                <link
                    ref="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap"
                    rel="stylesheet"
                />
            </Head>
            <body>
                <Main />
                <NextScript />
            </body>
        </Html>
    )
}