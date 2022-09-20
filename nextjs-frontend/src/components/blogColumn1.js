import styles from '@/styles/components/blogColumn1.module.scss'
import Image from 'next/image';
import dummy1 from '@/images/cms/dummy1.png'
import Link from 'next/link';
import { BlogTxt } from '@/components'

const BlogColumn1 = () => {
  return (
    <article className={styles.article}>
      <Link href="/">
        <a className={styles.blogLink}>
          <div className={styles.imgBox}>
            <Image
              src={dummy1}
              alt=""
              layout="responsive"
              sizes="(min-width: 1340px) 1300px, (min-width: 768px) 720px, 100vw"
              priority
            />
          </div>
          <BlogTxt
            cat="FASHION"
            cat2="TREND & STORY"
            ttl="【インフルエンサーインタビューvol.5】魅せるインスタブランディング×望む未来を創るコーチング・美容ライフ　梅宮翠さん"
            name="ARATA HOMMA"
            time="2022年7月20日"
            fs24
          />
        </a>
      </Link>
    </article>
  );
}

export default BlogColumn1;