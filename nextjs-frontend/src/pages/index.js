import styles from '@/styles/components/home.module.scss'
import { BlogPattern1, BlogPattern2, BlogPattern3, BlogPattern4, BlogPattern5, BlogPattern6, BlogPattern7, BlogPattern8, BlogPattern9, Button2, FirstClass, Meta } from '@/components'
import PageLayout from '@/components/Layouts/PageLayout'
import Container from '@/components/Layouts/container'
import { apiHost } from '@/lib/constants'

export const getServerSideProps = async () => {
    const res = await fetch(`${apiHost}/api/liondor/`)
    const data = await res.json()
    console.log(data)

    return {
        props: {
            posts: data
        }
    }
}

export default function Home({posts}) {
    return (
        <>
            <Meta />

            <section className="cont1">
                <Container>
                    <h2 className="ttl1 ivy">First Class</h2>
                    <FirstClass />
                </Container>
            </section>

            <section className={`cont ${styles.cont2}`}>
                <Container>
                    <h2 className="ttl1 ivy">Special</h2>
                    <BlogPattern1 />
                </Container>
            </section>

            <section className={`cont ${styles.cont3}`}>
                <Container>
                    <h2 className="ttl1 ivy">fasion</h2>
                    <BlogPattern2 />
                </Container>
            </section>

            <section className={`cont ${styles.cont4}`}>
                <Container>
                    <h2 className="ttl1 ivy">collection</h2>
                    <BlogPattern3 />
                </Container>
            </section>

            <section className={`cont ${styles.cont5}`}>
                <Container>
                    <h2 className="ttl1 ivy">Beauty</h2>
                    <BlogPattern1 />
                </Container>
            </section>

            <section className={`cont ${styles.cont6}`}>
                <Container>
                    <h2 className="ttl1 ivy">Trend</h2>
                    <BlogPattern4 />
                </Container>
            </section>

            <section className={`cont ${styles.cont7}`}>
                <Container>
                    <h2 className="ttl1 ivy">Life Style</h2>
                    <BlogPattern1 />
                </Container>
            </section>

            <section className={`cont ${styles.cont8}`}>
                <Container>
                    <h2 className="ttl1 ivy">Wedding</h2>
                    <BlogPattern4 mode2 />
                </Container>
            </section>

            <section className={`cont ${styles.cont9}`}>
                <Container>
                    <h2 className="ttl1 ivy">Top Leader</h2>
                    <BlogPattern1 column3None />
                </Container>
            </section>

            <section className={`cont ${styles.cont10}`}>
                <Container>
                    <h2 className="ttl1 ivy">Fortune</h2>
                    <BlogPattern7 />
                </Container>
            </section>

            <section className={`cont ${styles.cont11}`}>
                <Container>
                    <h2 className="ttl1 ivy">Video</h2>
                    <BlogPattern5 />
                </Container>
            </section>

            <section className={`cont ${styles.cont12}`}>
                <Container>
                    <h2 className="ttl1 ivy">on-line salon</h2>
                    <BlogPattern6 />
                    <Button2 />
                </Container>
            </section>

            <section className={`cont ${styles.cont13}`}>
                <div className={styles.wrapper}>
                    <Container>
                        <BlogPattern8 />
                    </Container>
                </div>
            </section>

            <section className={`cont ${styles.cont14}`}>
                <Container>
                    <h2 className="ttl1 ivy">present</h2>
                    <BlogPattern9 />
                    <Button2 />
                </Container>
            </section>
        </>
    )
}

Home.getLayout = function getLayout(page) {
    return <PageLayout>{page}</PageLayout>
}
