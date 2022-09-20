import styles from '@/styles/components/blogPickup.module.scss'
import Image from 'next/image';
import dummy2 from '@/images/cms/dummy2.png'
import Link from 'next/link';
import { BlogTxt } from '@/components'

const BlogPickup = () => {
  return (
    <div className={styles.pickUp}>
      <Link href="/">
        <a className={styles.blogLink}>
          <div className={`${styles.imgBox} fill`}>
            <Image
              src={dummy2}
              alt=""
              layout="fill"
              objectFit="cover"
              sizes="(min-width: 1340px) 612px, (min-width: 768px) 400px, 100vw"
              priority
            />
          </div>
          <div className={styles.txtBox}>
            <BlogTxt
              fs22
              tac
              white
              cat="FASHION"
              cat2="TREND & STORY"
              ttl="【インフルエンサーインタビューvol.5】魅せるインスタブランディング×望む未来を創るコーチング・美容ライフ　梅宮翠さん"
              name="ARATA HOMMA"
              time="2022年7月20日"
            />
          </div>
        </a>
      </Link>
    </div>
  );
}

export default BlogPickup;