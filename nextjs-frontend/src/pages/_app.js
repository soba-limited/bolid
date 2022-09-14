import 'tailwindcss/tailwind.css'
import '@/styles/globals.scss'

const App = ({ Component, pageProps }) => {

  const getLayout = Component.getLayout || ((page) => page)

  return (
    <>
      {getLayout(<Component {...pageProps} />)}
    </>
  )
}

export default App
