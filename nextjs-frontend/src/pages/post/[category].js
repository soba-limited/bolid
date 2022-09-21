import { useRouter } from "next/router";
import PageLayout from '@/components/Layouts/PageLayout'
import Container from '@/components/Layouts/container'
import { PageTitle } from "@/components";

const apiHost = process.env.NEXT_PUBLIC_BACKEND_URL

const Post = () => {
  const router = useRouter();
  const { category } = router.query
  const catUpper = category?.toUpperCase()

  return (
    <section className="cont1">
      <PageTitle title={catUpper} ivy />
      <Container></Container>
    </section>
  );
}

export default Post;

Post.getLayout = function getLayout(page) {
  return <PageLayout>{page}</PageLayout>
}

export const getServerSideProps = async ({params}) => {
  const res = await fetch(`${apiHost}/api/liondor/post/${params.category}`)
  const data = await res.json()

  return {
    props: {
      posts: data
    }
  }
}