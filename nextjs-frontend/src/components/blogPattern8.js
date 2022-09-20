import styles from '@/styles/components/blogPattern8.module.scss'
import Link from 'next/link';
import Image from 'next/image';
import { dummyImage7 } from '@/lib/constants';
import { BlogTxt } from '@/components'

const BlogPattern8 = () => {
  return (
    <article className={styles.article}>
      <h2 className={`${styles.ttl} ivy ttl1`}>PICKUP INFOMATION</h2>
      <div className={styles.flex}>
        {dummyImage7.map((items, index) => (
          <Link href="/" key={index}>
            <a className={styles.blogLink}>
              <div className={styles.imgBox}>
                <Image
                  src={items.src}
                  alt=""
                  layout="responsive"
                  sizes="(min-width: 1340px) 124px, (min-width: 768px) 124px, 100vw"
                  priority
                />
              </div>
              <div className={styles.txtBox}>
                <BlogTxt
                  smallMb
                  fs14
                  cat="FASHION"
                  cat2="TREND & STORY"
                  ttl="フェンディ 2022年秋冬クチュールコレクション"
                  name="ARATA HOMMA"
                  time="2022年7月20日"
                />
              </div>
            </a>
          </Link>
        ))}
      </div>
    </article>
  );
}

export default BlogPattern8;