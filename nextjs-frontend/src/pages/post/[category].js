import { useRouter } from "next/router";
import PageLayout from '@/components/Layouts/PageLayout'
import Container from '@/components/Layouts/container'
import { ArticleColumn, CatNavi, PageTitle } from "@/components";
import { apiHost } from '@/lib/constants'
import styles from '@/styles/components/pageSingle.module.scss'

export const getServerSideProps = async ({params}) => {
  const res = await fetch(`${apiHost}/api/liondor/post/${params.category}`)
  const data = await res.json()

  return {
    props: {
      posts: data
    }
  }
}

const Post = ({posts}) => {
  const router = useRouter();
  const { category, cat } = router.query
  const upperCat = category.toUpperCase()

  return (
    <section className="cont1">
      <PageTitle title={upperCat} ivy mb0 />
      <CatNavi />
      <Container>
        <section className={styles.section}>
          <div className={styles.flex}>
            <ArticleColumn posts={posts} />
          </div>
        </section>
      </Container>
    </section>
  );
}

export default Post;

Post.getLayout = function getLayout(page) {
  return <PageLayout>{page}</PageLayout>
}