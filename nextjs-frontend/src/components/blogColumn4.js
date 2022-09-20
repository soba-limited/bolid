import styles from '@/styles/components/blogColumn4.module.scss'
import Link from 'next/link'
import Image from 'next/image'
import { BlogTxt } from '@/components'
import { dummyImage4 } from '@/lib/constants'

const BlogColumn4 = () => {
  return (
    <article className={styles.article}>
      {dummyImage4.map((items, index) => (
        <Link href="/" key={index}>
          <a className={styles.blogLink}>
            <div className={styles.imgBox}>
              <Image
                src={items.src}
                alt=""
                layout="responsive"
                sizes="(min-width: 1340px) 300px, (min-width: 768px) 180px, 100vw"
                priority
              />
            </div>
            <BlogTxt
              smallMb
              cat="FASHION"
              cat2="TREND & STORY"
              ttl="フェンディ 2022年秋冬クチュールコレクション"
              name="ARATA HOMMA"
              time="2022年7月20日"
            />
          </a>
        </Link>
      ))}
    </article>
  );
}

export default BlogColumn4;