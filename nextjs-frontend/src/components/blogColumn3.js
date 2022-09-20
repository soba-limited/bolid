import styles from '@/styles/components/blogColumn3.module.scss'
import Image from 'next/image';
import Link from 'next/link';
import { BlogTxt } from '@/components'
import { dummyImage2 } from '@/lib/constants'

const BlogColumn3 = () => {
  return (
    <article className={styles.bottomArea}>
      {dummyImage2.map((items, index) => (
        <Link href="/" key={index}>
          <a className={styles.blogLink}>
            <div className={styles.imgBox}>
              <Image
                src={items.src}
                alt=""
                layout="responsive"
                sizes="(min-width: 1340px) 412px, (min-width: 768px) 230px, 100vw"
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

export default BlogColumn3;