import {Header} from "@/components";

const PageLayout = ({children}) => {
  return (
    <>
      <Header />

      <main>
        {children}
      </main>
    </>
  );
}

export default PageLayout;